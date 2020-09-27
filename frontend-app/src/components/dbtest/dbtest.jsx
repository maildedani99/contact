import React from 'react'
import { useState, useEffect } from 'react';
import styles from './dbtest.module.css';

const DbTest = () => {


    const [users, setUsers] = useState([''])

    const usersFetch = () => {
        const url = 'http://localhost/api/messages';
        const options = {
            method: 'GET',
            headers: new Headers(),
        };
        fetch(url, options)
            .then(response => {
                if (response.status === 200) {
                    return response.json();
                }
                return Promise.reject(response.status);
            })
            .then(function (myJson) {
                setUsers(myJson);
            })
            .catch(error => console.log(error));
    }

    /* const [data, setData] = useState({})

    const handleInputChange = (event) => {
        setData({
            ...data,
            [event.target.name]: event.target.value
        })
        console.log(data);
    } */

    useEffect(() => {
        usersFetch()
    }, [])


    return (

        users.map(item =>
            <div className={styles.__message_card}>
                <h3>{item.user_id}: {item.message}</h3>
            </div>
            

        )

    )
}
export default DbTest;