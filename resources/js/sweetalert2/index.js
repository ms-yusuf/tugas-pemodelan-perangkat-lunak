import * as $ from 'jquery';
import Swal from 'sweetalert2';

export default (function () {
    $(document).on('click', "form.delete button", function(e) {
        var _this = $(this);
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin ingin menghapus?', // Opération Dangereuse
            text: '', // Êtes-vous sûr de continuer ?
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-primary',
            confirmButtonText: 'Ya', // Oui, sûr
            cancelButtonText: 'Tidak', // Annuler
        }).then(res => {
            if (res.value) {
                _this.closest("form").submit();
            }
        });
    });
}())
