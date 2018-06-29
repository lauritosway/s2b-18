<script type="text/javascript">

$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        formData: {_token: '{{csrf_token()}}'},
        start: function (e, data)
        {
            $("#photoUpload").addClass('hidden');

            var photoPending = '<div class="photoPending"><div class="loadingPhoto"><i class="fa fa-circle-o-notch fa-spin"></i></div><div class="uploading">Uploading...</div></div>';

            if( $("#images .photo:eq(0)").length )
                $( "#images .photo:eq(0)" ).after(photoPending);
            else
                $("#images").prepend(photoPending);


        },
        done: function (e, data)
        {

            var photo = '<div  class="photo" ><img class="img-responsive" src="'+data.result.url+'"><div type="submit" class="btn btn-danger delete">X</div></div>';

            if( $("#images .photo:eq(0)").length )
                $( "#images .photo:eq(0)" ).after(photo);
            else
                $("#images").prepend(photo);

            $("#images .photoPending").last().remove();

            $("#menuPhotos").remove();


        },
        progressall: function (e, data) {
            /*
            if(parseInt(data.loaded / data.total * 100, 10) == 100)
            {
            }
            */
        }
    });

});
</script>