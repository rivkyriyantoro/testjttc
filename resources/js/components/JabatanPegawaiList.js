// resources/js/components/JabatanPegawaiList.js
import React, { useEffect, useState } from "react";
import axios from "axios";

const JabatanPegawaiList = () => {
    const [jabatanPegawais, setJabatanPegawais] = useState([]);

    useEffect(() => {
        axios.get("/api/jabatan-pegawais").then((response) => {
            setJabatanPegawais(response.data);
        });
    }, []);

    return (
        <div>
            <h1>Daftar Jabatan Pegawai</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nama Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    {jabatanPegawais.map((jabatanPegawai) => (
                        <tr key={jabatanPegawai.id}>
                            <td>{jabatanPegawai.nama_jabatan}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default JabatanPegawaiList;
