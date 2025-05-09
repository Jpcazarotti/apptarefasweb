document.querySelectorAll('.checkboxTarefa').forEach(checkbox => {
    checkbox.addEventListener('change', ()=>{
        const idTarefa = checkbox.dataset.id;
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`status/${idTarefa}`, {
            method: 'PATCH',
            headers: {
                'Content-Type' : 'application/json',
                'X-CSRF-TOKEN' : token
            }
        });
    })
});