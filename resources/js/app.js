require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/MyComponent'

const app = createApp({})

app.component('welcome', Welcome)

app.mount('#app')
