	<!-- script -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery-3.5.1.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

	<script type="text/javascript">
		function add_field() {
			let size = $('[name="size"]').val();
			//
			let field_val = `<div class="form-group">
								<label>Name</label>
								<input type="text" name="name[]" class="form-control" placeholder="name" required="true"/>
							</div>
							<div class="form-group">
								<label>Login Code</label>
								<input type="text" name="login[]" class="form-control" placeholder="alphanumeric login data" required="true"/>
							</div>`;
			// append
			$("#container").append(field_val);
			$('[name="size"]').val(++size);
		}

		function reset_field() {
			$('[name="size"]').val(1);
			$("#container").empty();			
		}

		function submit_field() {
			let data = [];
			let status = true;

			$('input[name^="name"]').each(function(i) {
				let name = $(this).val();
				let login = $(`[name^="login"]:eq(${i})`).val();
				//
				if(name === '' || login === null || login.length < 6) {
					status = false;
				}

				data.push({"name": name, "login": login});
			});

			if(status) {
				$.post("<?=base_url('home/create')?>", JSON.stringify(data), function(res) {
					window.alert(res);
				});
			} else {
				window.alert("Fill all field or your login code less than 6 characters");
			}
		}
</script>	
</div>	

</body>
</html>