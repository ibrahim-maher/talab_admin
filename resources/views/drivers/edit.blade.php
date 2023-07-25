@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">{{trans('lang.driver_plural')}}</h3>
		</div>

		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{trans('lang.dashboard')}}</a></li>
				<li class="breadcrumb-item"><a href= "{!! route('drivers') !!}" >{{trans('lang.driver_plural')}}</a></li>
				<li class="breadcrumb-item active">{{trans('lang.driver_edit')}}</li>
			</ol>
		</div>
		<div>

			<div class="card-body">

				<div id="data-table_processing" class="dataTables_processing panel panel-default" style="display: none;">{{trans('lang.processing')}}</div>

        <div class="row daes-top-sec mb-3">

        <div class="col-lg-12 col-md-12">

          <a href="{{route('orders')}}?driverId={{$id}}">

           <div class="card">

            <div class="flex-row">

              <div class="p-10 bg-info col-md-12 text-center">

                <h3 class="text-white box m-b-0"><i class="mdi mdi-cart"></i></h3></div>

                <div class="align-self-center pt-3 col-md-12 text-center">

                  <h3 class="m-b-0 text-info" id="total_orders">0</h3>

                  <h5 class="text-muted m-b-0">{{trans('lang.dashboard_total_orders')}}</h5>

                </div>

              </div>

            </div>
          </a>
        </div>

     

				<div class="error_top"></div>
				<div class="row restaurant_payout_create">
              <div class="restaurant_payout_create-inner">
                <fieldset>
                  <legend>{{trans('lang.driver_details')}}</legend>
							<div class="form-group row width-50">
	              <label class="col-3 control-label">{{trans('lang.first_name')}}</label>
                <div class="col-7">
  	              <input type="text" class="form-control user_first_name">
                  <div class="form-text text-muted">{{trans('lang.first_name_help')}}</div>
                </div>
	            </div>

              <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.last_name')}}</label>
                <div class="col-7">
                  <input type="text" class="form-control user_last_name">
                  <div class="form-text text-muted">{{trans('lang.last_name_help')}}</div>
                </div>
              </div>

	            <div class="form-group row width-50">
	              <label class="col-3 control-label">{{trans('lang.email')}}</label>
                <div class="col-7">
                  <input type="text" class="form-control user_email" disabled>
                  <div class="form-text text-muted">{{trans('lang.user_email_help')}}</div>
                </div>
	            </div>

	            <div class="form-group row width-50">
	              <label class="col-3 control-label">{{trans('lang.user_phone')}}</label>
                <div class="col-7">
                  <input type="text" class="form-control user_phone">
                  <div class="form-text text-muted">{{trans('lang.user_phone_help')}}</div>
                </div>
	            </div>

              <div class="form-group row width-100">
              <div class="col-12">
                <h6>{{ trans("lang.know_your_cordinates") }}<a target="_blank" href="https://www.latlong.net/">{{ trans("lang.latitude_and_longitude_finder") }}</a></h6>
              </div>
            </div>


              <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.user_latitude')}}</label>
                <div class="col-7">
                  <input type="number" class="form-control user_latitude">
                  <div class="form-text text-muted">{{trans('lang.user_latitude_help')}}</div>
                </div>
              </div>

              <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.user_longitude')}}</label>
                <div class="col-7">
                  <input type="number" class="form-control user_longitude">
                  <div class="form-text text-muted">{{trans('lang.user_longitude_help')}}</div>
                </div>
              </div>

               <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.profile_image')}}</label>
                <div class="col-7">
                  <input type="file" onChange="handleFileSelect(event)" class="">
                  <div class="form-text text-muted">{{trans('lang.profile_image_help')}}</div>
                </div>
                <div class="placeholder_img_thumb user_image">
                              </div>

                <div id="uploding_image"></div>
              </div>

	             </fieldset>

                <fieldset>
                    <legend>{{trans('driver')}} {{trans('lang.active_deactive')}}</legend>
                  <div class="form-group row">

                      <div class="form-group row width-50">
                          <div class="form-check width-100">
                            <input type="checkbox" id="is_active">
                            <label class="col-3 control-label" for="is_active">{{trans('lang.active')}}</label>
                          </div>
                      </div>

                    </div>
                </fieldset>

                      <fieldset>
                        <legend>{{trans('lang.car_details')}}</legend>
                           <div class="form-group row width-50">
			                <label class="col-3 control-label">{{trans('lang.car_number')}}</label>
			                <div class="col-7">
			                  <input type="text" class="form-control car_number">
			                  <div class="form-text text-muted">{{trans('lang.car_number_help')}}</div>
			                </div>
			              </div>

			              <div class="form-group row width-50">
			                <label class="col-3 control-label">{{trans('lang.car_name')}}</label>
			                <div class="col-7">
			                  <input type="text" class="form-control car_name">
			                  <div class="form-text text-muted">{{trans('lang.car_name_help')}}</div>
			                </div>
			              </div>
	            		   <div class="form-group row width-50">
			                <label class="col-3 control-label">{{trans('lang.car_image')}}</label>
			                <div class="col-7">
			                  <input type="file" onChange="handleFileSelectcar(event)" class="">
			                  <div class="form-text text-muted">{{trans('lang.car_image_help')}}</div>
			                </div>
			                <div class="placeholder_img_thumb car_image">
			                              </div>
			                <div id="uploding_image_car"></div>
			              </div>
				           </fieldset>
                   <fieldset>
   
    </fieldset>
                   </div>
              </div>
          </div>
		<div class="form-group col-12 text-center btm-btn">
			<button type="button" class="btn btn-primary save_driver_btn" ><i class="fa fa-save"></i> {{ trans('lang.save')}}</button>
			<a href="{!! route('drivers') !!}" class="btn btn-default"><i class="fa fa-undo"></i>{{ trans('lang.cancel')}}</a>
		</div>

	</div>

</div>

</div>

@endsection

@section('scripts')

<script>

var id = "<?php echo $id;?>";
var database = firebase.firestore();
var ref = database.collection('users').where("id","==",id);
var photo ="";
var carPictureURL ="";
var placeholderImage = '';
var placeholder = database.collection('settings').doc('placeHolderImage');
var user_active_deactivate =false;
var currentCurrency = '';
var currencyAtRight = false;
var decimal_degits = 0;
placeholder.get().then( async function(snapshotsimage){
    var placeholderImageData = snapshotsimage.data();
    placeholderImage = placeholderImageData.image;
})

var refCurrency = database.collection('currencies').where('isActive', '==' , true);
var append_list = '';

refCurrency.get().then(async function (snapshots) {
    var currencyData = snapshots.docs[0].data();
    currentCurrency = currencyData.symbol;
    currencyAtRight = currencyData.symbolAtRight;

    if(currencyData.decimal_degits){
        decimal_degits = currencyData.decimal_degits;
    }
});


$(document).ready(function(){
  
  jQuery("#data-table_processing").show();
    ref.get().then( async function(snapshots){
    var user = snapshots.docs[0].data();


  $(".user_first_name").val(user.firstName);

  $(".user_last_name").val(user.lastName);
  $(".user_email").val(user.email);
  $(".user_phone").val(user.phoneNumber);
  $(".car_name").val(user.carName);
  $(".car_number").val(user.carNumber);
  if(user.hasOwnProperty('location')){
    $(".user_latitude").val(user.location.latitude);
    $(".user_longitude").val(user.location.longitude);
  }

  photo = user.profilePictureURL;
  carPictureURL = user.carPictureURL;

  if(user.isActive){
    $(".user_active").prop('checked',true);
  }


  if(user.active){
      $("#is_active").prop( "checked", true );
      user_active_deactivate=true;
  }


  if (carPictureURL!='' && carPictureURL!=null) {

    $(".car_image").append('<img class="rounded" style="width:50px" src="'+carPictureURL+'" alt="image">');
  }else{

    $(".car_image").append('<img class="rounded" style="width:50px" src="'+placeholderImage+'" alt="image">');
  }
  if (photo!='' && photo!=null) {
    $(".user_image").append('<img class="rounded" style="width:50px" src="'+photo+'" alt="image">');

  }else{

    $(".user_image").append('<img class="rounded" style="width:50px" src="'+placeholderImage+'" alt="image">');
  }

  var orderRef = database.collection('restaurant_orders').where("driverID","==",id);
  orderRef.get().then( async function(snapshotsorder){
    var orders = snapshotsorder.size;
    $("#total_orders").text(orders);
  });
  if(currencyAtRight){
    var wallet_amount = parseFloat(user.wallet_amount).toFixed(decimal_degits)+currentCurrency;
  }else{
    var wallet_amount = currentCurrency+parseFloat(user.wallet_amount).toFixed(decimal_degits);
  }
  if(user.wallet_amount){
    $('#wallet_amount').text(wallet_amount);
  }
  if(isNaN(user.wallet_amount)){
    if(currencyAtRight){
      var wallet_amount = parseFloat(0).toFixed(decimal_degits)+currentCurrency;
      }else{
      var wallet_amount = currentCurrency+parseFloat(0).toFixed(decimal_degits);
      }
      $("#wallet_amount").text(wallet_amount);
  }

    if(user.userBankDetails){
     
    
      if(user.userBankDetails.holderName!=undefined){
        $("#holderName").val(user.userBankDetails.holderName);
      }
      if(user.userBankDetails.accountNumber!=undefined){
        $("#accountNumber").val(user.userBankDetails.accountNumber);
      }
      if(user.userBankDetails.otherDetails!=undefined){
        $("#otherDetails").val(user.userBankDetails.otherDetails);
      }
    }

    jQuery("#data-table_processing").hide();
      
  })



  $(".save_driver_btn").click(function(){

    var userFirstName = $(".user_first_name").val();
    var userLastName = $(".user_last_name").val();
    var email = $(".user_email").val();
    var userPhone = $(".user_phone").val();
    var active = $(".user_active").is(":checked");
    var user_active_deactivate =false;
    if($("#is_active").is(':checked')){
        user_active_deactivate =true;
    }
    var carName = $(".car_name").val();
    var carNumber = $(".car_number").val();
    var latitude = parseFloat($(".user_latitude").val());
    var longitude = parseFloat($(".user_longitude").val());

    if(userFirstName == ''){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.enter_owners_name_error')}}</p>");
          window.scrollTo(0, 0);

      }else if(userPhone == '' ){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.enter_owners_phone')}}</p>");
          window.scrollTo(0, 0);
        }
      else if(carName == ''){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.car_name_error')}}</p>");
          window.scrollTo(0, 0);
        }
        else if(carNumber == ''){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.car_number_error')}}</p>");
          window.scrollTo(0, 0);
        }else{

            var branchName=$("#branchName").val();
            var holderName=$("#holderName").val();
            var accountNumber=$("#accountNumber").val();
            var otherDetails=$("#otherDetails").val();
         
          database.collection('users').doc(id).update({'firstName':userFirstName,'lastName':userLastName,'email':email,'phoneNumber':userPhone,'isActive':active,'profilePictureURL':photo,'carName':carName,'carNumber':carNumber,'location.latitude':latitude,'location.longitude':longitude,'carPictureURL':carPictureURL,'role':'driver','active':user_active_deactivate,}).then(function(result) {

                  window.location.href = '{{ route("drivers")}}';

              });
      }
  })


})
var storageRef = firebase.storage().ref('images');
function handleFileSelect(evt) {
  var f = evt.target.files[0];
  var reader = new FileReader();

  reader.onload = (function(theFile) {
    return function(e) {

      var filePayload = e.target.result;
      var val =f.name;
      var ext=val.split('.')[1];
      var docName=val.split('fakepath')[1];
      var filename = (f.name).replace(/C:\\fakepath\\/i, '')

      var timestamp = Number(new Date());
      var filename = filename.split('.')[0] + "_" + timestamp + '.' + ext;
      var uploadTask = storageRef.child(filename).put(theFile);
      console.log(uploadTask);
      uploadTask.on('state_changed', function(snapshot){
      
      var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      console.log('Upload is ' + progress + '% done');
      jQuery("#uploding_image").text("Image is uploading...");
      
    }, function(error) {
      
    }, function() {
        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
            
            jQuery("#uploding_image").text("Upload is completed");
            photo = downloadURL;
             $(".user_image").empty();
            $(".user_image").append('<img class="rounded" style="width:50px" src="'+photo+'" alt="image">');

      });
    });

    };
  })(f);
  reader.readAsDataURL(f);
}

var storageRefcar = firebase.storage().ref('images');
function handleFileSelectcar(evt) {
  var f = evt.target.files[0];
  var reader = new FileReader();

  reader.onload = (function(theFile) {
    return function(e) {

      var filePayload = e.target.result;
      var val =f.name;
      var ext=val.split('.')[1];
      var docName=val.split('fakepath')[1];
      var filename = (f.name).replace(/C:\\fakepath\\/i, '')

      var timestamp = Number(new Date());
      var filename = filename.split('.')[0] + "_" + timestamp + '.' + ext;
      var uploadTask = storageRefcar.child(filename).put(theFile);
      console.log(uploadTask);
      uploadTask.on('state_changed', function(snapshot){
      
      var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      console.log('Upload is ' + progress + '% done');
      jQuery("#uploding_image").text("Image is uploading...");
    
    }, function(error) {
      
    }, function() {
        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
            jQuery("#uploding_image_car").text("Upload is completed");
            carPictureURL = downloadURL;
             $(".car_image").empty();
            $(".car_image").append('<img class="rounded" style="width:50px" src="'+carPictureURL+'" alt="image">');


      });
    });

    };
  })(f);
  reader.readAsDataURL(f);
}

</script>
@endsection
