function ohmy() {
			var req_file = 'keys.json';//this seems important
			var answer = $('#password').val();
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					alert(this.responseText);
				}
			};
			xmlhttp.open("GET", "hckr.php?q="+answer, true);
			xmlhttp.send();
		}