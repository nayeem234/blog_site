$(".editButton").click(function () {
    let id = $(this).data("id");
    $('#editModal').modal('show');

    axios.get("editPost/"+id).then(function (response) {
        let data = response.data;
            $('#title').val(data[0].title);
            $('#description').val(data[0].description);
            $('#editId').val(data[0].id);

        })
        .catch(function (error) {
            console.log(error)
        });
});

$('#closeBtn').click(function(){
    $('#editModal').modal('hide');
});

$(".editNews").click(function () {
    let id = $(this).data("id");
    $('#editNews').modal('show');

    axios.get("editNews/"+id).then(function (response) {
        let data = response.data;
            $('#title').val(data[0].title);
            $('#description').val(data[0].description);
            $('#editId').val(data[0].id);

        })
        .catch(function (error) {
            console.log(error)
        });
});
$('#closeBtn').click(function(){
    $('#editNews').modal('hide');
});

$(".editSports").click(function () {
    let id = $(this).data("id");
    $('#editSports').modal('show');

    axios.get("editSports/"+id).then(function (response) {
        let data = response.data;
            $('#title').val(data[0].title);
            $('#description').val(data[0].description);
            $('#editId').val(data[0].id);

        })
        .catch(function (error) {
            console.log(error)
        });
});
$('#closeBtn').click(function(){
    $('#editSports').modal('hide');
});



$(".editcontact").click(function () {
    let id = $(this).data("id");
    $('#editContact').modal('show');

    axios.get("editContact/"+id).then(function (response) {
        let data = response.data;
            $('#email').val(data[0].email);
            $('#Contact').val(data[0].contact_number);
            $('#Address').val(data[0].address);
            $('#editId').val(data[0].id);

        })
        .catch(function (error) {
            console.log(error)
        });
});
$('#closeBtn').click(function(){
    $('#editContact').modal('hide');
});
