const fadeInElements = document.querySelectorAll('.cl-fade-in');

for (let i = 0; i < fadeInElements.length; i++) {
  const element = fadeInElements[i];
  element.style.animationDelay = `${i * 0.1}s`;
}