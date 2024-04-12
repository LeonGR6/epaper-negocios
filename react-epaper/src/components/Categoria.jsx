import useQuisco from "../hooks/useQuiosco"

export default function Categoria({categoria}) {

    const {handleClickCategoria, categoriaActual} = useQuisco();
    const {icono, id, nombre} = categoria

    return (
        <div className={`${categoriaActual.id === id ? "bg-white" : 'bg-blue-100'} flex items-center gap-4 border w-full p-3 hover:bg-blue-300 cursor-pointer`}>
           
            <button 
                className="text-lg font-bold cursor-pointer truncate"
                type="button"
                onClick={() => handleClickCategoria(id)}
            >
                {nombre}
            </button>
        </div>
    )
}

