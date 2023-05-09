// redireciona para a página do link clicado
const menuLinks = document.querySelectorAll('.menubar a');

menuLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault(); // previne o comportamento padrão do link
    window.location.href = link.getAttribute('href'); // redireciona para a URL do link
  });
});

// fecha o menu quando clicado fora do botão ou do menu
document.addEventListener('click', (event) => {
  const btnGerenciamento = document.querySelector('#btn-gerenciamento');
  const menu = document.querySelector('.menubar');

  if (event.target !== btnGerenciamento && !btnGerenciamento.contains(event.target)) {
    menu.style.display = 'none';
  }
});
