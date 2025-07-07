// formHandler.js
export function handleSectionFormSubmit(e, form, modal) {
	e.preventDefault();
	const method = form.attr("data-method");

	if (process.env.NODE_ENV === "development") {
		console.log(`${method} request submitted`);
	}

	if (method === "insert") {
		// Call insert API or function here
		console.log("Inserting new section...");
	} else if (method === "PUT") {
		// Call update API or function here
		console.log("Updating existing section...");
	}

	modal.modal("hide");
}
