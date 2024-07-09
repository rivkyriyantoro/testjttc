import React, { useEffect, useState } from "react";
import axios from "axios";

const KontrakList = () => {
    const [kontraks, setKontraks] = useState([]);

    useEffect(() => {
        axios.get("/api/kontraks").then((response) => {
            setKontraks(response.data);
        });
    }, []);

    return (
        <div>
            <h1>Daftar Kontrak</h1>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    {kontraks.map((kontrak) => (
                        <tr key={kontrak.id}>
                            <td>{kontrak.tanggal_mulai}</td>
                            <td>{kontrak.tanggal_selesai}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default KontrakList;
