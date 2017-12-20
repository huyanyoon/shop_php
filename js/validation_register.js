//VALIDATION
		$("#forgot-pass").validate({
			rules: {
                s_email: {
                	required: true,
                	email 	:true,
                	remote: {
                		url:"module/register-login/check_email.php",
                		type: "post",
                		data:{
                			s_email:function(){
                				return $("#s_email").val();
                			}
                		}
                	}
                }
               
            },
            messages: {
                s_email: {
                	required :"Vui lòng nhập Email",
                	 email  :"Email không hợp lệ",
                	 remote :"Email không tồn tại"
                }
               
               
            }
		});

		$("#register-form").validate({

					rules: {
						usernames: 
						{
							required: true,
							minlength: 5,
							remote: {
					        url: "module/register-login/check_register.php",
					        type: "post",
					        data: {
					          usernames: function() {
					            return $( "#usernames" ).val();
					          }
					        }
					      }
						},
						
						address: {
							required: true,
							minlength: 2
						},
						phone: {
							required: true,
							minlength: 5
						},
						password: {
							required: true,
							minlength: 5
						},
						confirm_password: {
							required: true,
							minlength: 5,
							equalTo: "#r_password"
						},
						email: {
							required: true,
							email: true,
							remote: {
					        url: "module/register-login/check_register.php",
					        type: "post",
					        data: {
					          email: function() {
					            return $( "#email" ).val();
					          }
					        }
					      }
						}

					
					},
					messages: {
						usernames:
						{
							required:"Vui lòng nhập họ",
							remote: "Username đã tồn tại!",
							minlength: "Username phải có ít nhất 5 kí tự"
						} ,
						
						address: {
							required: "Vui lòng nhập địa chỉ",
							minlength: "Địa chỉ ngắn vậy, chém gió ah?"
						},
						phone: {
							required: "Vui lòng nhập số điện thoại",
							minlength: "Số máy quý khách vừa nhập là số không có thực"
						},
						password: {
							required: 'Vui lòng nhập mật khẩu',
							minlength: 'Vui lòng nhập ít nhất 5 kí tự'
						},
						confirm_password: {
							required: 'Vui lòng nhập mật khẩu',
							minlength: 'Vui lòng nhập ít nhất 5 kí tự',
							equalTo: 'Mật khẩu không trùng'
						},
						email: {
							required: "Vui lòng nhập Email",
							//minlength: "Your password must be at least 5 characters long",
							//equalTo: "Please enter the same password as above",
							remote: "is already in email!",
							//email: "Vui lòng nhập Email"
						},
						//email: "Vui lòng nhập Email"
					}
				});