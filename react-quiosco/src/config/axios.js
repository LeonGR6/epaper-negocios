import axios from "axios";

const clienteAxios = axios.create({
    baseURL:'http://localhost/quiosco/laravel-quiosco/public/',
    headers: {
        'Accept' : 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    },
    
    withCredentials: true,
})

export default clienteAxios