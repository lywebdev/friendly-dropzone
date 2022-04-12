$(document).ready(() => {
    $('.btn-add-file').click(() => {
        $('#files').trigger('click');
    });



    $('#files').change((e) => {
        let input = $(e.target);
    })
});
