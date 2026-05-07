  function abrirTermos() {
        const modal = new bootstrap.Modal(document.getElementById('meuModal'));
        modal.show();

      }

function aceitarTermos() {
document.getElementById('btnAceito').addEventListener('click', function() {
    document.getElementById('check_termos').checked = true;
    
    const modal = bootstrap.Modal.getInstance(document.getElementById('meuModal'));
    modal.hide();
});
}