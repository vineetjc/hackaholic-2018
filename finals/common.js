function check(answer) {
	$.ajax({
			type: "POST",
			url: "check_finals.php",
			dataType: "json",
			data: {
				answer: answer
			},
			success: function (response) {
					console.log(response);
					if (response == "failed") {
						alert("Wrong Answer. Try Again.");
					}else if (response == "already_done") {
						alert("This question has been already completed.");
						window.location = "index.html";
					}
					else {
						alert("Success");
						window.location = "index.html";
					}
			},
			error: function () {
					alert("Connection Error");
					window.location = "../login.html";
			},
	});
}
