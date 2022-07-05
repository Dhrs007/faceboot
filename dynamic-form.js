function addForm(){
    var addrow = '<div class="container"> <div class="row" id="dynamic_form">\
    <div class="row">\
        <div class="form-group baru-data">\
        <div class="col-md-2">\
        <input type="text" name="username" placeholder="username" class="form-control" rows="1"></input>\
    </div>\
    <div class="col-md-2">\
        <input type="password" name="password" placeholder="password" class="form-control" rows="1"></input>\
    </div>\
    <div class="col-md-1">\
        <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>\
    </div>\
            <div class="col-md-1">\
                <input type="text" name="komentar" placeholder="komentar" class="form-control" rows="1"></input>\
            </div>\
            <div class="col-md-1">\
                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>\
            </div>\
            <div class="col-md-1">\
                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>\
            </div>\
            <div class="col-md-1">\
                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>\
            </div>\
            <div class="col-md-2">\
            <input class="form-control" type="text" placeholder="Status" aria-label="Disabled input example" disabled>\
            </div>\
            <div class="button-group">\
                <button type="button" class="btn btn-success btn-tambah"><i class="fa fa-plus"></i></button>\
                <button type="button" class="btn btn-danger btn-hapus" style="display:none;"><i class="fa fa-times"></i></button>\
            </div>\
        </div>\
    </div>\
</div>\
</div>'
    $("#dynamic_form").append(addrow);
 }
 
 $("#dynamic_form").on("click", ".btn-tambah", function(){
    addForm()
    $(this).css("display","none")     
    var valtes = $(this).parent().find(".btn-hapus").css("display","");
 })
 
 $("#dynamic_form").on("click", ".btn-hapus", function(){
  $(this).parent().parent('.baru-data').remove();
  var bykrow = $(".baru-data").length;
  if(bykrow==1){
    $(".btn-hapus").css("display","none")
    $(".btn-tambah").css("display","");
  }else{
    $('.baru-data').last().find('.btn-tambah').css("display","");
  }
 });
 
 $('.btn-simpan').on('click', function () {
    $('#dynamic_form').find('input[type="text"], input[type="number"], select, input').each(function() {
       if( $(this).val() == "" ) {
          event.preventDefault()
          $(this).css('border-color', 'red');
          
          $(this).on('focus', function() {
             $(this).css('border-color', '#ccc');
          });
       }
    })
 })