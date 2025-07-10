$(document).ready(function () {
	setInterval(loadBellInitialization, 1000);
});

function loadBellInitialization() {
	const clock = $("#currentTime");
	const now = new Date();

	const hours = now.getHours().toString().padStart(2, "0");
	const minutes = now.getMinutes().toString().padStart(2, "0");
	const seconds = now.getSeconds().toString().padStart(2, "0");

	const currentTime = `${hours}:${minutes}:${seconds}`;
	clock.html(`<i class="fas fa-clock"></i> ${currentTime}`);
	triggerBell(currentTime);
}

function triggerBell(currentTime) {
	$.ajax({
		type: "GET",
		url: "/api/get-schedules",
		success: function (response) {
			let schedules = response.schedules;

			schedules.forEach((schedule) => {
				if (currentTime === schedule.time) {
					Toastify({
						text: `🔔 It's time for ${schedule.activity}!`,
						duration: 5000,
						gravity: "top", // top or bottom
						position: "right", // left, center or right
						backgroundColor: "#4CAF50",
						stopOnFocus: true,
						close: true,
					}).showToast();
				}
			});
		},
		error: function (xhr, status, error) {
			console.error("Failed to fetch schedules:", error);
		},
	});
}
