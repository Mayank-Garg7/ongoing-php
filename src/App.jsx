// import axios from 'axios'
// import { useEffect, useState } from 'react'
// import TodoCard from './component/TodoCard'
// import { BrowserRouter as BR, Route, Routes } from 'react-router-dom'
// import { dividerClasses } from '@mui/material'
// import CardCollection from './component/CardCollection'
// import CardDetails from './component/CardDetails'
// import PrivateRoute from './component/PrivateRoute'
// import Login from './component/Login'
// import Home from './component/Home'



// function App() {
//  let [data,setData]=useState([])
//  let [loading,setLoading]=useState(false)
//  let [error,setError]=useState(false)
//  let [errorMessage,setErrorMessage]=useState('')

//   useEffect(()=>{
// async function  fethcData(){
//   setLoading(true)
// try{
//   let res=await axios.get('https://dummyjson.com/products')
//   setData(res.data.products)
//   setLoading(false)
//   setError(false)
// }catch(err){
//   console.log(err.message)
//   setLoading(false)
//   setError(true)
//   setErrorMessage(err.message)
// }


// }

// fethcData()
//   },[])

//   return (
// <BR>
// <Routes>
// <Route path='/' element={<Home/>}/>

// <Route path='login' element={<Login/>}/>
// <Route path="card" element={<PrivateRoute/>}>

// <Route path='carddetail' element={<CardCollection todo={data} loading={loading} errorMessage={errorMessage} error={error} />}/>
// <Route path='singlecard/:id' element={<CardDetails/>}/>
  
// </Route>

// </Routes>

// </BR>
//   )
// }

// export default App


// import React, { useState } from 'react'

// const App = () => {
//   const [input,setInput]=useState(1)
//   const [value,setValue]=useState(9)
//   // let initialValue=10
// const handleChange=(e)=>{
// setInput(e.target.value)
// setValue(value-1)
// }
// console.log(value)
//   return (
//     <div style={{display:'flex',alignItems:'center',justifyContent:'center',height:'100vh',width:'100vw',flexDirection:'column'}}>
//       <h1 className='heading' style={{animationDuration:`${value}s`}}>Welcome in DDUGKY</h1>
// <input type='number' min={1} max={10} onChange={handleChange} value={input}/>

//     </div>
//   )
// }

// export default App



import React, { useState } from 'react'
let obj=[
  {
  id:1,
  title:'S'
},
  {
  id:2,
  title:'M'
},
  {
  id:3,
  title:'xl'
},
  {
  id:4,
  title:'XL'
},
]


const App = () => {
const [active,setActive]=useState(3)


const handleActive=(id)=>{
  console.log('hello')
  console.log(id)
  setActive(id)


}

  return (
    <section className='main'>

<ul className='container'>
{obj.map((item)=>{
  return <li onClick={()=>handleActive(item.id)} key={item.id} className={active===item.id?'item activeItem':'item'} >{item.title}</li>
})}

</ul>

    </section>
  )
}

export default App