import React from "react";
import ReactDOM from "react-dom";

import App from "./App";

const appRoot = document.getElementById("appa");

document.addEventListener('DOMContentLoaded', () => {
	ReactDOM.render(
		<App />,
		document.getElementById('appa')
	);
	console.log('hello');
});

