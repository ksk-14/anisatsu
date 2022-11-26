import './bootstrap';
// import React from 'react';
import React, {useState, useEffect} from 'react';
import ReactDOM from 'react-dom';
import axios from "axios";

function AllView(){
    const [todos, setTodos] = useState([]);
    
    useEffect(
        () => {
            axios
                .get( '/api/annictAllView' )
                .then( (res) => {
                    setTodos(res.data);
                })
                .catch( (e) => {
                    console.log(e);
                })
        },
        []
    );
    return (
        <div>{todos}</div>
    );
}

ReactDOM.render(
    <div className='contentCenter'>
        <AllView />
        <p className='contentTitle'>考察するアニメを探す</p>
        <p className='contentTitle'>注目アニメ</p>
    </div>,
    document.getElementById('home')
);