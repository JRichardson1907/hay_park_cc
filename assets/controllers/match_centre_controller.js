
import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = [
        'competition',
        'grade',
        'season',
        'team',
        'card',
        'carousel',
        'count',
        'empty',
        'previous',
        'next'
    ];

    connect() {
        this.boundUpdateArrows = this.updateArrows.bind(this);

        this.carouselTarget.addEventListener(
            'scroll',
            this.boundUpdateArrows,
            { passive: true }
        );

        this.filter();
    }

    disconnect() {
        this.carouselTarget.removeEventListener(
            'scroll',
            this.boundUpdateArrows
        );
    }

    
filter() {
    const competition = this.competitionTarget.value;
    const grade = this.gradeTarget.value;
    const season = this.seasonTarget.value;
    const teamSelect = this.teamTarget;

    // Determine which teams exist for this selection.
    const availableTeams = [...new Set(
        this.cardTargets
            .filter(card =>
                card.dataset.competition === competition &&
                card.dataset.grade === grade &&
                card.dataset.season === season
            )
            .map(card => card.dataset.team)
    )].sort();

    // Preserve the selected team if still available.
    const selectedTeam = teamSelect.value;

    teamSelect.replaceChildren(new Option('All Teams', 'all'));

    availableTeams.forEach(team => {
        teamSelect.add(new Option(team, team));
    });

    teamSelect.value = availableTeams.includes(selectedTeam)
        ? selectedTeam
        : 'all';

    let visibleCount = 0;

    this.cardTargets.forEach(card => {
        const matches =
            card.dataset.competition === competition &&
            card.dataset.grade === grade &&
            card.dataset.season === season &&
            (
                teamSelect.value === 'all' ||
                card.dataset.team === teamSelect.value
            );

        card.hidden = !matches;

        if (matches) {
            visibleCount++;
        }
    });

    this.countTarget.textContent =
        `${visibleCount} match${visibleCount === 1 ? '' : 'es'}`;

    this.emptyTarget.hidden = visibleCount !== 0;

    this.carouselTarget.scrollLeft = 0;
    this.updateArrows();
}


    previous() {
        this.scroll(-1);
    }

    next() {
        this.scroll(1);
    }

    scroll(direction) {
        const firstCard = this.cardTargets.find(
            card => !card.hidden
        );

        if (!firstCard) {
            return;
        }

        const gap = 20;
        const distance = firstCard.getBoundingClientRect().width + gap;

        this.carouselTarget.scrollBy({
            left: direction * distance,
            behavior: 'smooth'
        });
    }

    updateArrows() {
        const carousel = this.carouselTarget;
        const maxScroll = carousel.scrollWidth - carousel.clientWidth;

        this.previousTarget.disabled = carousel.scrollLeft <= 2;
        this.nextTarget.disabled =
            maxScroll <= 2 || carousel.scrollLeft >= maxScroll - 2;
    }
}
