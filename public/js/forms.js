
<script>
$(form).on('submit', function() {
if(confirm('¿Realmente desea enviar el formulario?')) {
return true;
}
return false;
});
</script>
