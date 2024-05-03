import React, { useState } from 'react'

const App = () => {
  const [input, setInput] = useState(1)
  const [value, setValue] = useState(9)
  // let initialValue=10
  const handleChange = (e) => {
    setInput(e.target.value)
    setValue(value - 1)
  }
  // console.log(value)
  return (
    <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'center', height: '100vh', width: '100vw', flexDirection: 'column' }}>
      <h1 className='heading' style={{ animationDuration: `${value}s` }}>Welcome in DDUGKY</h1>
      <input type='number' min={1} max={10} onChange={handleChange} value={input} />

    </div>
  )
}

export default App



