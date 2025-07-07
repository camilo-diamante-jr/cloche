// main.js or sectionManager.js
$(document).ready(async function () {
	const timestamp = new Date().getTime();

	try {
		const { openAddSectionModal, openEditSectionModal } = await import(
			`./sectionsModal.js?t=${timestamp}`
		);
		const { handleSectionFormSubmit } = await import(
			`./formHandler.js?t=${timestamp}`
		);

		const modal = $("#sectionModal");
		const form = $("#sectionSubmitForm");

		$("#addSectionBtn").on("click", function () {
			try {
				openAddSectionModal(modal, form);
			} catch (err) {
				console.error("Error opening Add Section modal:", err);
				alert("Something went wrong while trying to add a section.");
			}
		});

		$(".editSectionBtn").on("click", function () {
			const section_id = $(this).data("section-id");
			try {
				openEditSectionModal(section_id, modal, form);
			} catch (err) {
				console.error("Error opening Edit Section modal:", err);
				alert("Something went wrong while trying to edit the section.");
			}
		});

		form.on("submit", function (e) {
			try {
				handleSectionFormSubmit(e, form, modal);
			} catch (err) {
				console.error("Error submitting section form:", err);
				alert("Form submission failed. Please try again.");
			}
		});
	} catch (importError) {
		console.error("Failed to load section modules:", importError);
		alert(
			"Critical error: Unable to load section features. Please refresh or contact support."
		);
	}
});
