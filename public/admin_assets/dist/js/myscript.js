  /*****************Upload images*************************/ 
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result
    };
    reader.readAsDataURL(event.target.files[0]);
  };
 /** end upload images **/ 
$(document).ready(function(){
    $(function () {
	    $(".textarea").wysihtml5();
	});
});
function FormatNumber(obj) {
    var strvalue;
    if (eval(obj))
        strvalue = eval(obj).value;
    else
        strvalue = obj; 
    var num;
    num = strvalue.toString().replace(/\$|\,/g,'');
    if(isNaN(num))
    num = "";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num*100+0.50000000001);
    num = Math.floor(num/100).toString();
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
    num = num.substring(0,num.length-(4*i+3))+','+
    num.substring(num.length-(4*i+3));
    //return (((sign)?'':'-') + num);
    eval(obj).value = (((sign)?'':'-') + num);
}
function isNumberKey(evt)
{
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
   return false;
   return true;
}
$(document).ready( function ( e ){
    $('input#name').keyup(function(event) {
		var title, slug;
        title = $(this).val();
        slug = title.toLowerCase();
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        slug = slug.replace(/ /gi, "-");
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        $('input#slug').val(slug);
	});
});
$('.alert_thongbao').delay(3000).slideUp();
$(document).ready(function(){
    $(function () {
        $("#example1,#example2").DataTable({
            language:{
                "sProcessing":   "Đang xử lý...",
                "sLengthMenu":   "Xem _MENU_ mục",
                "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
                "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                "sInfoPostFix":  "",
                "sSearch":       "Tìm:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Đầu",
                    "sPrevious": "Trước",
                    "sNext":     "Tiếp",
                    "sLast":     "Cuối"
                }
            }

        });
    });
});
// send email
$(document).ready(function(){
    $('#addFile').click(function(){
        $('#insertBtnFile').append('<div class="form-group"><input type="file" name="inpFile[]"></div>');
    });
});
$(document).ready(function(){
    $('#chkAll').change(function(event){
        var checkAll = $('#chkAll:checked').length > 0;
        if (checkAll) {
            $('input[name="chkItem[]"]').prop('checked', true);
        }else{
            $('input[name="chkItem[]"]').prop('checked', false);
        }
    });
});

jQuery(document).ready(function($) {
    $('#change_slug').click(function(event) {
        $('#change_slug').hide();
        $('#btn-ok').show();
        $('.cancel.button-link').show();
        changeInput();
    });

    $('.cancel.button-link').click(function(event) {
        $('#change_slug').show();
        $('#btn-ok').hide();
        $('.cancel.button-link').hide();
        cancelInput();
    });
});
$(document).ready(function(){
    $('a#del_img').on('click', function(){
        var url =  homeUrl() + "/backend/product/delimg/";
        var _token = $("form[name='frmEditProduct']").find("input[name='_token']").val();
        var idImg = $(this).parent().find("img").attr("idImg");
        var img = $(this).parent().find("img").attr("src");
        var rid = $(this).parent().find("img").attr("id");
        $.ajax({
            url: url + idImg,
            type: 'GET',
            cache: false,
            data: {"_token":_token,"idImg":idImg,"urlImg":img},
            success: function(data){
                if (data == 'OK') {
                    $('#'+rid).remove();
                }else{
                    alert('Error ! Please contact admin !');
                }
            }
        });
    });
});
tinymce.init({
    selector: 'textarea#txtContent',
    height: 350,
    width:"",
    content_style: ".mce-content-body {font-size:14pt;font-family:Times New Roman;}",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
    ],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
    toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    font_formats: 'Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;'
        + 'Dancing Script=cursive;' 
    + 'Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;'
        + 'Oswald=sans-serif;'
    + 'Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats',
    image_advtab: true,
    menubar: false,
    toolbar_items_size: 'small',
    relative_urls: false, 
    remove_script_host : false,
    // forced_root_block: false,
    filemanager_title:"Media Manager",  
    external_filemanager_path: homeUrl() + "/file/",
    external_plugins: { "filemanager" : homeUrl() + "/file/plugin.min.js"},
});







$(document).ready(function(){
    $('a#del_img').on('click', function(){
        var url =  homeUrl() + "/backend/product/delimg/";
        var _token = $("form[name='frmEditProduct']").find("input[name='_token']").val();
        var idImg = $(this).parent().find("img").attr("idImg");
        var img = $(this).parent().find("img").attr("src");
        var rid = $(this).parent().find("img").attr("id");
        
        $.ajax({
            url: url + idImg,
            type: 'GET',
            cache: false,
            data: {"_token":_token,"idImg":idImg,"urlImg":img},
            success: function(data){
                if (data == 'OK') {
                    $('#'+rid).remove();
                }else{
                    alert('Error ! Please contact admin !');
                }
            }
        });
    });
});

$(document).ready(function(){
    $('a#del_gallery').on('click', function(){
        var url =  homeUrl() + "/backend/inf/delimg/";
        var _token = $("form[name='frmEditImg']").find("input[name='_token']").val();
        var idImg = $(this).parent().find("img").attr("idImg");
        var img = $(this).parent().find("img").attr("src");
        var rid = $(this).parent().find("img").attr("id");
        
        $.ajax({
            url: url + idImg,
            type: 'GET',
            cache: false,
            data: {"_token":_token,"idImg":idImg,"urlImg":img},
            success: function(data){
                if (data == 'OK') {
                    $('#'+rid).remove();
                }else{
                    alert('Error ! Please contact admin !');
                }
            }
        });
    });
});

$(document).ready(function(){
    $('#chkAll').change(function(event){
        var checkAll = $('#chkAll:checked').length > 0;

        if (checkAll) {
            $('input[name="chkItem[]"]').prop('checked', true);
        }else{
            $('input[name="chkItem[]"]').prop('checked', false);
        }
    });
});


$(document).ready(function(){
    var id = $('.liColor').attr('id');
    $("#iphiColor").val(id);

    $('.liColor').on('click', function(ev){
        ev.preventDefault();
        $('.liColor').removeClass('active');
        $(this).addClass('active');

        var id = $(this).attr('id');
        $("#iphiColor").val(id);
    });
});

$(function() {
    $('body').on('click', '.btn-destroy', function(event) {
        var action = $(this).attr('data-href');
        $('#form-destroy').attr('action', action);
    });
    $('body').on('click', '.kv-error-close', function(event) {
        event.preventDefault();
    });
    $('#frm_product').on('submit', function() {
        price = parseInt($("input[name='price']").val());
        price_promotion = parseInt($("input[name='price_promotion']").val());
        if(price <= price_promotion ){
            alert('Giá khuyến mại phải nhỏ hơn giá bán !');
            return false;
        }
    });
    $('#form_post').on('submit', function() {
        img = $("input[name='image']").val();
        if(img == ''){
            alert('Bạn chưa chọn hình ảnh cho bài viết.');
            $(".image__thumbnail img").css({"border": "2px", "border-style": "solid", "border-color": "red"});
            return false;
        }
        var listArr = [];
        $("input[name='category[]']:checked").each(function() {
           listArr.push($(this).val());
        });
        if (listArr.length == 0) {
            $('.category-box').css({
                'border': '2px',
                'border-style': 'solid',
                'border-color' : 'red'
            });
            alert('Bạn chưa chọn danh mục bài viết.');
            var $container = $("html,body");
            var $scrollTo = $('.category-box');
            $container.animate({scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop() - 200, scrollLeft: 0},300);
            return false;
        }
    });
    
});

function urlFileDelete(el) {
    var parent = $(el).closest('.image');
    var img = parent.find('img').first();
    var input = parent.find('input').first();

    img.attr('src', img.data('init'));
    input.val('');
}


function urlFileMultiDelete(el) {
    $(el).closest('.image__thumbnail').remove();
}
function repeater(event, el, url, indexClass, type, table = null) {
    /*event.preventDefault();
    var target = $(el).closest('.repeater').find('table tbody');
    var indexs = $(indexClass).closest('table').find(indexClass);
    var index = indexs.length;
    $.get(url, {index: index + 1, type: type}, function (data) {
        target.append(data)
    });*/

    event.preventDefault();
    var target = $(el).closest('.repeater').find('table tbody');
    if (table != null) {
        var indexs = $(table).find(indexClass);
    }else{
        var indexs = $(indexClass).closest('table').find(indexClass);
    }
    var index = indexs.length;
    $.get(url, {index: index + 1, type: type}, function (data) {
        target.append(data)
    });
}

jQuery(document).ready(function($) {
    $("#meta_title").keyup(function(){
        var countTitle =  this.value.length;
        $('#countTitle').text(countTitle+'/70');
        $(".google__title span").text(this.value);
    });
    $("#meta_description").keyup(function(){
        var countMeta = this.value.length;
        $('#countMeta').text(countMeta+'/320');
        $(".google__description").text(this.value);
    });
});
$(document).on('ready', function() {
    $('.multislt').select2({
        placeholder: "Chọn danh mục",
    });
});

var regExp = /[0-9\.\,]/;
$('.number').on('keydown keyup', function(e) {

    var value = String.fromCharCode(e.which) || e.key;
    // Only numbers, dots and commas
    if (!regExp.test(value)
        && e.which != 188 // ,
        && e.which != 190 // .
        && e.which != 8   // backspace
        && e.which != 46  // delete
        && (e.which < 37  // arrow keys
            || e.which > 40)) {
        e.preventDefault();
        return false;
    }
    if ( event.which >= 37 && event.which <= 40 ) return;
    this.value = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});// khong cho nhap chu vao text box

$('body').on('keydown keyup', '.number', function(e) {
    var value = String.fromCharCode(e.which) || e.key;
    // Only numbers, dots and commas
    if (!regExp.test(value)
        && e.which != 188 // ,
        && e.which != 190 // .
        && e.which != 8   // backspace
        && e.which != 46  // delete
        && (e.which < 37  // arrow keys
            || e.which > 40)) {
        e.preventDefault();
        return false;
    }
    if (event.which >= 37 && event.which <= 40) return;
    this.value = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});


jQuery(document).ready(function($) {
    $('#change_slug').click(function(event) {
        $('#change_slug').hide();
        $('#btn-ok').show();
        $('.cancel.button-link').show();
        changeInput();
    });

    $('.cancel.button-link').click(function(event) {
        $('#change_slug').show();
        $('#btn-ok').hide();
        $('.cancel.button-link').hide();
        cancelInput();
    });
});

function changeInput(){
    var content = $('#current-slug').val();
    var base = $('#baseUrl').val();
    var html = '<span class="default-slug">'+base+'/<span id="editable-post-name"><input type="text" id="new-post-slug" value="'+content+'"></span></span>';
    $('#sample-permalink').html(html);
}

function cancelInput(slug = null){

    var current_slug;
    if(slug == null){
       current_slug = $('#current-slug').val();
    }else{
        current_slug = slug;
    }
    var base = $('#baseUrl').val();
    var html = '<a class="permalink" target="_blank" href="'+base+'/'+current_slug+'"><span class="default-slug">'+base+'/<span id="editable-post-name">'+current_slug+'</span></span></a>';
    $('#sample-permalink').html(html);
}

