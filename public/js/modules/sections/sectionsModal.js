// sectionsModal.js
export function openAddSectionModal(modal, form) {
	modal.find(".modal-title").text("Add Section");
	form.attr("data-method", "insert");
	form.trigger("reset");
	form.find('input[name="sectionId"]').val("");
	modal.modal("show");
}

export function openEditSectionModal(section_id, modal, form) {
	modal.find(".modal-title").text("Update Section");
	form.attr("data-method", "PUT");
	form.trigger("reset");

	$.ajax({
		url: "/api/getSectionById",
		method: "POST",
		data: { sectionID: section_id },
		dataType: "json",
		success: function (res) {
			if (res.success) {
				const section = res.data;
				form.find('input[name="sectionId"]').val(section.sectionID);
				form.find('input[name="sectionName"]').val(section.sectionName);
				form.find('input[name="sectionAdviser"]').val(section.teacherName);
				modal.modal("show");
			} else {
				alert("Section not found.");
			}
		},
		error: function () {
			alert("Error fetching section data.");
		},
	});
}
