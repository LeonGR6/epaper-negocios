import {Link} from 'react-router-dom'
import { useAuth } from '../hooks/useAuth'

export default function AdminSidebar() {

    const { logout } = useAuth({middleware: 'auth'});

    return (
        <aside className="md:w-72 h-screen">
            <div className="p-2">
                <img 
                    src="/img/epaper.png"
                    alt="imagen logotipo"
                    className="w-72"
                />
            </div>

            <nav className='flex flex-col p-4'>
                <Link to="/admin" className='font-bold text-lg'>Ordenes</Link>
                <Link to="/admin/productos" className='font-bold text-lg'>Productos</Link>
            </nav>

            <div className='my-14 px-14'>
                <button
                    type="button"
                    className="text-center bg-red-500 w-15 p-2  font-bold text-white truncate rounded-md"
                    onClick={logout}
                >
                    Cerrar Sesión
                </button>
            </div>
        </aside>
    )
}
