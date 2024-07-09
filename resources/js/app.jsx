import "./bootstrap";
import React from "react";
import ReactDOM from "react-dom";
import KontrakList from "./components/KontrakList";
import JabatanPegawaiList from "./components/JabatanPegawaiList";
import PegawaiList from "./components/PegawaiList";

if (document.getElementById("app")) {
    ReactDOM.render(<KontrakList />, document.getElementById("app"));
}

if (document.getElementById("app")) {
    ReactDOM.render(<JabatanPegawaiList />, document.getElementById("app"));
}

if (document.getElementById("app")) {
    ReactDOM.render(<PegawaiList />, document.getElementById("app"));
}
