// Gallery scroll-triggered animation
function revealGalleryItems() {
  const galleryItems = document.querySelectorAll('.gallery-item');
  const triggerBottom = window.innerHeight * 0.95;
  galleryItems.forEach((item, idx) => {
    const boxTop = item.getBoundingClientRect().top;
    if (boxTop < triggerBottom) {
      setTimeout(() => item.classList.add('visible'), idx * 120);
    }
  });
}
window.addEventListener('scroll', revealGalleryItems);
window.addEventListener('DOMContentLoaded', revealGalleryItems);
// Respect prefers-reduced-motion
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  document.querySelectorAll('.gallery-item').forEach(item => {
    item.style.transition = 'none';
    item.style.animation = 'none';
  });
}
