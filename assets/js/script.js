const searchToggle = document.getElementById('searchToggle');
const searchPanel = document.getElementById('searchPanel');
const searchInput = document.getElementById('searchInput');

searchToggle.addEventListener('click', () => {

    const isOpen = searchToggle.getAttribute('aria-expanded') === 'true';

    searchToggle.setAttribute('aria-expanded', !isOpen);

    if (isOpen) {
        searchPanel.classList.remove('grid-rows-[1fr]');
        searchPanel.classList.add('grid-rows-[0fr]');
    } else {
        searchPanel.classList.remove('grid-rows-[0fr]');
        searchPanel.classList.add('grid-rows-[1fr]');

        setTimeout(() => {
            searchInput.focus();
        }, 300);
    }
});

const menuToggle = document.getElementById('mobileMenuToggle');
const mobileMenu = document.getElementById('mobileMenu');

const line1 = document.getElementById('menuLine1');
const line2 = document.getElementById('menuLine2');
const line3 = document.getElementById('menuLine3');

menuToggle.addEventListener('click', () => {
  const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

  menuToggle.setAttribute(
    'aria-expanded',
    String(!isOpen)
  );

  if (isOpen) {
    // Close menu
    mobileMenu.classList.remove('grid-rows-[1fr]');
    mobileMenu.classList.add('grid-rows-[0fr]');

    line1.classList.remove('translate-y-0', 'rotate-45');
    line1.classList.add('-translate-y-1.5');

    line2.classList.remove('opacity-0');

    line3.classList.remove('translate-y-0', '-rotate-45');
    line3.classList.add('translate-y-1.5');
} else {
    // Open menu
    mobileMenu.classList.remove('grid-rows-[0fr]');
    mobileMenu.classList.add('grid-rows-[1fr]');

    line1.classList.remove('-translate-y-1.5');
    line1.classList.add('translate-y-0', 'rotate-45');

    line2.classList.add('opacity-0');

    line3.classList.remove('translate-y-1.5');
    line3.classList.add('translate-y-0', '-rotate-45');
}
});