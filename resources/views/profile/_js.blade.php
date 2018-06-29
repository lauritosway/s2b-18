<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?libraries=places&language=en"></script>
<script src="{{ asset('js/places.js') }}"></script>
<script src="{{ asset('js/autosize.js') }}"></script>

<script type="text/javascript" >


    $('.modal-body input').click(function() {
        setLanguages();
    });

    $(document).ready( function() {
        setLanguages();
        if( $("#locality").val() != '' && $("#country").val() != '' )
            $("#place").val( $("#locality").val() + ', ' + $("#country").val() );
        $("#place").keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });

    function setLanguages()
    {
        var languages = '';

        type = $('.modal-body input:checkbox').map(function(){
            return this.checked ? this.value : [];
        }).get();

        type.forEach( function(element) {
            languages = languages + element + ', ';
        });

        $("#spokenLanguages").html(languages.replace(/,\s*$/, ""));

    }

</script>