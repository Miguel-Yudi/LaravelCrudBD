// Aguarda o DOM carregar completamente
document.addEventListener('DOMContentLoaded', function() {
    // Elementos do DOM
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closeBtn');

    // Função para abrir o menu
    function openMenu() {
        console.log('Abrindo menu...');
        sidebar.classList.add('active');
        overlay.classList.add('active');
        hamburger.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Função para fechar o menu
    function closeMenu() {
        console.log('Fechando menu...');
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Event listener para hambúrguer
    if (hamburger) {
        hamburger.onclick = function() {
            console.log('Clique no hamburger detectado');
            openMenu();
        };
    }

    // Event listener para botão X - MÚLTIPLAS TENTATIVAS
    if (closeBtn) {
        // Método 1: onclick
        closeBtn.onclick = function() {
            console.log('Método 1: Clique no X detectado');
            closeMenu();
            return false;
        };

        // Método 2: addEventListener
        closeBtn.addEventListener('click', function(e) {
            console.log('Método 2: Clique no X detectado');
            e.preventDefault();
            e.stopPropagation();
            closeMenu();
        });

        // Método 3: mousedown (caso click não funcione)
        closeBtn.addEventListener('mousedown', function(e) {
            console.log('Método 3: MouseDown no X detectado');
            e.preventDefault();
            closeMenu();
        });
    }

    // Event listener para overlay
    if (overlay) {
        overlay.onclick = function() {
            console.log('Clique no overlay detectado');
            closeMenu();
        };
    }

    // Fechar com ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && sidebar.classList.contains('active')) {
            console.log('ESC pressionado');
            closeMenu();
        }
    });

    // Links do menu
    const menuLinks = document.querySelectorAll('.menu-items a');
    menuLinks.forEach(function(link) {
        link.onclick = function() {
            console.log('Link do menu clicado');
            closeMenu();
        };
    });

    console.log('Script carregado com sucesso!');
    console.log('CloseBtn encontrado:', closeBtn);
});