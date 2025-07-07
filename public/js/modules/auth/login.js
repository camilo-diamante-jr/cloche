let currentToast = null; // To track active toast

$(document).ready(function () {
	initiateLogin();
});

function initiateLogin() {
	$("#loginSubmitForm").on("submit", function (e) {
		e.preventDefault();

		const email = $("#email").val().trim();
		const password = $("#password").val().trim();

		if (!email || !password) {
			showToast("Email and password are required.", "error");
			return;
		}

		checkValidation(email, password);
	});
}

function checkValidation(email, password) {
	$.ajax({
		url: "/auth/login",
		type: "POST",
		dataType: "json",
		data: { email: email, password: password },
		success: function (response) {
			if (response.status === "success") {
				showToast(response.message, "success");
				// setTimeout(() => redirectByUserType(response.userType), 1000); // Give user time to see message
			} else {
				showToast(response.message || "Login failed.", "error");
			}
		},
		error: function (xhr, status, error) {
			console.error("AJAX error:", status, error);
			showToast("An error occurred. Please try again.", "error");
		},
	});
}

function showToast(message, type) {
	// Dismiss previous toast
	if (currentToast) {
		currentToast.hideToast();
	}

	const bgColor = type === "success" ? "#28a745" : "#dc3545";

	currentToast = Toastify({
		text: message,
		duration: 4000,
		close: true,
		gravity: "top",
		position: "right",
		backgroundColor: bgColor,
		stopOnFocus: true,
	});
	currentToast.showToast();
}

function redirectByUserType(userType) {
	switch (userType) {
		case "Admin":
			showToast("Redirecting to Admin dashboard...", "success");
			// window.location.href = "/admin/dashboard";
			break;
		case "Staff":
			showToast("Redirecting to Staff portal...", "success");
			// window.location.href = "/staff/home";
			break;
		default:
			showToast("User type not recognized.", "error");
			break;
	}
}
