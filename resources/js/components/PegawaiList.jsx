// resources/js/components/PegawaiList.js
import React, { useEffect, useState } from "react";
import axios from "axios";

const PegawaiList = () => {
    const [pegawais, setPegawais] = useState([]);

    useEffect(() => {
        axios.get("/api/pegawais").then((response) => {
            setPegawais(response.data);
        });
    }, []);

    return (
        <div>
            <h1>Daftar Pegawai</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Tanggal Mulai Kontrak</th>
                        <th>Tanggal Selesai Kontrak</th>
                    </tr>
                </thead>
                <tbody>
                    {pegawais.map((pegawai) => (
                        <tr key={pegawai.id}>
                            <td>{pegawai.nama}</td>
                            <td>{pegawai.alamat}</td>
                            <td>{pegawai.tanggal_lahir}</td>
                            <td>{pegawai.no_telepon}</td>
                            <td>{pegawai.email}</td>
                            <td>{pegawai.jabatan.nama_jabatan}</td>
                            <td>{pegawai.kontrak.tanggal_mulai}</td>
                            <td>{pegawai.kontrak.tanggal_selesai}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default PegawaiList;
