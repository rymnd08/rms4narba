<script>
    const forms = document.querySelectorAll('.delete-form')
    forms.forEach(form => {
        form.addEventListener('submit', e => {
            e.preventDefault()
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#e74a3b",
                cancelButtonColor: "#858796",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit()
                }
            });
        })
    })
</script>