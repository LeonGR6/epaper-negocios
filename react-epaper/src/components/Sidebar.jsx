import useQuisco from "../hooks/useQuiosco"
import Categoria from "./Categoria"
import { useAuth } from "../hooks/useAuth"

export default function Sidebar() {

    const { categorias } = useQuisco()
    const {logout, user} = useAuth({middleware: 'auth'})

    return (
        <aside className="md:w-72">
            <div className="p-4">
                <img 
                    className="w-80"
                    src="img/epaper.png"
                    alt="Imagen epaper"
                />
            </div>

            <p className="my-10 text-xl font-semibold text-center">Hola: {user?.name}  </p>
            <p className="my-10 text-lg font-semibold text-center"> {user?.email} </p>

            <div className="mt-10">
                {categorias.map( categoria => (
                    <Categoria 
                        key={categoria.id}
                        categoria={categoria}
                    />
                ))}
            </div>

            <div className="my-32 px-14">
                <button
                    type="button"
                    className="text-center bg-red-500 w-15 px-8 p-2 font-bold text-white truncate rounded-md"
                    onClick={logout}
                >
                    Cancelar Orden
                </button>
            </div>
        </aside>
    )
}
