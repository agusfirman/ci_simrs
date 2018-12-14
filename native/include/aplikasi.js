  $(function () {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            titleFormat: 'dd MM yyyy',
            autoclose: true

        });
      });
                // give $().bootstrapDP the bootstrap-datepicker functionality


$(document).ready(function(){
        //#table_pr, #table_task, #table_ap, #table_brg_it, #table_ups
         $('.datatables').DataTable( {
           dom: 'Bfrtip',
           lengthChange: !1,
           responsive: true,
              buttons: ['copy', 'print','csv']
          } );
        // $('.datatable').dataTable();


          // document.addEventListener("DOMContentLoaded", function(event) {
          //   $('.datatables').DataTable({
          //     pageLength: 10,
          //     lengthChange: false,
          //     bFilter: false,
          //     autoWidth: false
          //   });
          // });



        //toggle `popup` / `inline` mode
//$.fn.editable.defaults.mode = 'popup';

      $('#t_users').click(function(e){
         e.preventDefault();
         $('#f_t_users').modal('show');
        });

        $('#t_users_tambah').click(function(){
          alert('test');
        });
        //  $("#t_users_tambah,.e_users").click(function(){
        // //   var id = $(this).attr("data-id");
        //     $("#m_users").modal('show');
        // //   $.ajax({
        // //     type  : "POST",
        // //     url   : "controllers/users/f_users.php",
        // //     data  : "id="+id,
        // //     success : function(data){
        // //       $(".modal-body").html(data);
        // //        judul(id);
        // //     }
        // //   });
        // });
  //untuk cek login
  $('#btn_login').click(function(event){
   var username = $('input:text[name=username]');
   var password = $('input:password[name=password]');
    event.preventDefault();
    //alert(username.val());
    var url = 'controllers/login/cek_login.php';
    var url_sukses = 'index.php';
    var string = $('#form_login').serialize();
    if(username.val().length==0){
    username.focus();
    return false;
    }else if(password.val().length==0){
    password.focus();
    return false;
    }
    $.ajax({
      type  : 'POST',
      url   : url,
      data  : string,
      success : function(data){
        if(data=='Sukses'){
          //alert(data);
        window.location = url_sukses;
        }else{
          //alert(data);
          username.val('');
          password.val('');
          username.focus();
        }
      }
    });
  });

//star modul registrasi
$('.daftar').click(function(event){
event.preventDefault();
  $('#m_regis').modal('show');
  $('.login').fadeOut(1500);
  $.post('views/regis/f_regis.php',
  function(data){
    $('.modal-body').html(data);
    var nik = $('input:text[name=nik]');
    var nama = $('input:text[name=nama]');
    var jkel = $('input:radio[name=jkel]');
    var users = $('input:text[name=users]');
    var pass = $('input:password[name=pass]');
    var level = $('select[name=level]');

    $(nik).on('keypress', function(e){
    var c = e.keyCode || e.charCode;
    switch (c) {
    case 8: case 9: case 27: case 13: return;
    case 65:
    if (e.ctrlKey === true) return;
    }
    if (c < 48 || c > 57) e.preventDefault();
    });


    $('#b_daftar').click(function(event) {
      event.preventDefault();
      var url='controllers/regis/simpan_users.php';
      var string = $('#f_regis').serialize();

      if(nik.val().length==0){
      nik.focus();
      return false;
      }else if(nama.val().length==0){
      nama.focus();
      return false;
      }else if(jkel.val().length==0){
      jkel.focus();
      return false;
      }else if(users.val().length==0){
      users.focus();
      return false;
      }else if(pass.val().length==0){
      pass.focus();
      return false;
      }else if(level.val().length==0){
      level.focus();
      return false;
      }
      $.ajax({
        type  : 'POST',
        url   : url,
        data  : string,
        success : function(data){
        $('#m_regis').modal('hide');
        //alert(data);
        if(data=='sukses'){
        alert('Anda berhasil mendaftar, silahkan login');
      }else{
        alert('Gagal mendaftar');
      }
        $('.login').fadeIn(2000);
        }
      });
    });

  });
});
//End modul registrasi

$('.batal,.close').click(function(){
  $('.login').fadeIn(2000);
});

    var url = window.location;
       $('li.nav-item a[href="'+ url +'"]').addClass('active');
       $('li.nav-item a.nav-link').filter(function() {
            return this.href == url;
       }).addClass('active');

   });

// Start Modul Roles
  $('.t_roles,.e_roles').click(function(){
    //alert('test');
    var id_roles = $(this).attr('data-id');
    $('#m_roles').modal('show');
    $.ajax({
      type  : 'POST',
      url   : 'controllers/users/f_roles.php',
      data  : 'id='+id_roles,
      success : function(data){
        $('.modal-body').html(data);
         judul_roles(id);
      }
    });
  });

      //fungsi judul modal
  function judul_roles(id){
    if(id!=0){
    $('.modal-title').text('Edit roles');
    }else{
    $('.modal-title').text('Tambah roles');
    }
  }

  $('#b_roles').click(function(){
  var role_name = $('input:text[name=role_name]');
  var url='models/users/simpan_roles.php';
  var string  = $('#f_roles').serialize();
    if(role_name.val().length==0){
    role_name.focus();
    return false;
    }
  //alert(string);
  $.ajax({
    type  : 'POST',
    url   : url,
    data  : string,
    success : function(data){
       $('#m_roles').modal('hide');
       alert(data);
       //location.reload();
    }
  });
});

// End Start Modul Roles

// Modul task


//master data sub kat task
// $(".t_sub_cat,.e_sub_cat").click(function(){
//   var id_sub_cat = $(this).attr("data-id");
//   $("#m_sub_cat_task").modal('show');
//   $.ajax({
//     type  : "POST",
//     url   : "controllers/task/f_sub_cat_task.php",
//     data  : "id_sub_cat="+id_sub_cat,
//     success : function(data){
//       $(".modal-body").html(data);
//        judul_m_sub_cat_task(id_sub_cat);
//     }
//   });
// });
//

    function simpan_sub_cat(url,string){
      $.ajax({
        type  : "POST",
        url   : url,
        data  : string,
        success : function(data){
           $("#m_sub_cat_task").modal('hide');
           //alert(data);
           location.reload();
        }
      });
    }


    $("#b_sub_cat_task").click(function(){
      // var string = $("#f_sub_task_ca").serialize();
      // var sub_cat_id = $("input:text[name=sub_cat_id]");
      // var id_cat_task = $("select[name=id_cat_task]");
      // var nama_sub_cat = $("input:text[name=nama_sub_cat]");
      // var url = "models/task/simpan_sub_task_cat.php";
      //alert("string");
      //    if(id_cat_task.val().length==0){
      //    id_cat_task.focus();
      //    return false;
      //   }
      //   if(nama_sub_cat.val().length==0){
      //    nama_sub_cat.focus();
      //    return false;
      // }
      //   simpan_sub_cat(url,string);
    });



//fungsi kirim data ke modal
  $('.t_task,.e_task').click(function(){
    //alert('test');
    var id = $(this).attr('data-id');
    // $('#m_task').modal('show');
    $.ajax({
      type  : 'POST',
      url   : 'controllers/task/f_task.php',
      data  : 'id='+id,
      success : function(data){
        $('.modal-body').html(data);
         judul_m_task(id);
      }
    });
  });

    //fungsi untuk simpan task
  $('#b_task').click(function(event){
  var subject = $('input:text[name=subject]');
  var task_cat = $('#task_cat');
  var spek = $('select[name=spek]');
  var in_mutu = $('select[name=in_mutu]');
  var _case = $('textarea[name=_case]');
  var nm_pel = $('input:text[name=nm_pel]');
  var bagian = $('input:text[name=bagian]');
  var ext = $('input:text[name=ext]');
  var url='models/task/simpan_task.php';
  var string  = $('#f_task').serialize();
      $(subject).keyup(function(){
          var txt = $(this).val();
             $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
        });

        $(_case).keyup(function(){
          var txt = $(this).val();
             $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
        });

        $(nm_pel).keyup(function(){
          var txt = $(this).val();
             $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
        });

  if(subject.val().length==0){
  subject.focus();
  return false;
  }
  if(task_cat.val().length==0){
  task_cat.focus();
  return false;
  }
  //alert(string);
    $.ajax({
      type  : 'POST',
      url   : url,
      data  : string,
      success : function(data){
         $('#m_task').modal('hide');
         //alert(data);
         location.reload();
      }
    });
  });





//fungsi untuk ubah status task
  $('.t_detail').click(function(){
    var id_task = $(this).attr('data-id');
    //alert(id_task);
    $('#m_detail').modal('show');
    $.ajax({
      type  : 'POST',
      url   : 'controllers/task/f_task_detail.php',
      data  : 'id_task='+id_task,
      success : function(data){
        $('.modal-body').html(data);

      }
    });
  });

// //fungsi untuk simpan status task
   $('#b_s_detail_task').click(function(event) {
    event.preventDefault();
      var solv = $('textarea[name=solv]').val();
      var status = $('input:radio[name=status]:checked').val();
      var id_task =$('.id_task').attr('data-id');
      url = 'models/task/update_statustask.php';
      var string  = $('#f_taskdetail').serialize();
      //alert(status+id_task+solv);
      $.ajax({
        type  : 'POST',
        url   : url,
        data  : 'id_task='+id_task+'&status='+status,
        success : function(data){
          $('#m_detail').modal('hide');
          location.reload();
          //alert(data);
        }
      });
    });



  // make username editable

    // $('.e_solv').editable({
    //          url: 'views/mytask/post.php',
    //          type: 'text',
    //          pk: 1,
    //          name: 'solv',
    //          title: 'Masukan Solving Task'
    //   });

  //fungsi untuk simpan solving task
$('#b_s_solving').click(function(event) {
  event.preventDefault();
  var solv = $('textarea[name=solv]').val();
 //      var id_task =$('.id_task').attr('data-id');
 //      //url = 'models/task/update_statustask.php';
          var string  = $('#f_solv').serialize();
          alert(solv);
 //   /*   $.ajax({
 //        type  : 'POST',
 //        url   : url,
 //        data  : 'id_task='+id_task+'&status='+status+'&solv='+solv,
 //        success : function(data){
 //          $('#m_detail').modal('hide');
 //           // location.reload();
 //          alert(data);
 //        }
 //      });*/
 });

  $('.t_export').click(function(){
   $(location).attr('href', 'models/task/export.php');
  });

  function judul_m_task(id){
    if(id!=0){
    $('.modal-title').text('Edit task');
    }else{
    $('.modal-title').text('Tambah task');
    }
  }


//End Task
