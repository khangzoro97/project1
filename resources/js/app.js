require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/MyComponent'
import Conditional from './components/ConditionalRendering'
import Rendering from './components/ListRendering'

const app = createApp({})

app.component('list-rendering', Rendering)
app.mount('#app')
