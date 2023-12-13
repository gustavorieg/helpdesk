<form name="formLogin" autocomplete="off">
    @csrf
    <input type="text" value="ti@embrast.com.br" name="email">
    <input type="password" value="123456" name="password">
    <button type="submit">entrar</button>
</form>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(function(){
        $('form[name="formLogin"]').submit(function(event){
            event.preventDefault();
            
            $.ajax({
                url: "{{route('login.store')}}",
                type: "post",
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response){
                    if(response.success === true){
                        window.location.href = "{{ route('index') }}";
                    } else {
                        window.location.href = "{{ route('login.store') }}";
                    }
                } 
            });
        });
    });

</script>