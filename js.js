$(document).on('submit','#saveStudent', function(e) {
    e.preventDefault()

    // alert('hi there')
    formData = new FormData(this)
    formData.append('save_student',true)
    $.ajax({
        type: "POST",
        url: "code.php",
        data:formData,
        processData: false,
        contentType: false,
        success: function (response) {
           var res = $.parseJSON(response)
           
           if(res.status == 200){
            alert('Student Created Successfully')
           }else{
            alert('Something Went Wrong')
           }
        }
    });

})