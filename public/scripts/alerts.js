const deleteEmployee = (id, fullname) => {
    Swal.fire({
        title: `Excluir colaborador #${id}\n${fullname} ?`,
        icon: 'warning',
        confirmButtonColor: '#26de69',
        confirmButtonText: 'Sim',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        cancelButtonText: 'Não',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                timer: 700,
                icon: 'success',
                showConfirmButton: false
            });
        }
    })
}