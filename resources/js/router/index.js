import {createWebHistory, createRouter} from "vue-router";

import Home from '../pages/Home';
import Prpostatus from '../pages/Prpostatus';
import Register from '../pages/Register';
import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';

import Books from '../components/Books';
import AddBook from '../components/AddBook';
import EditBook from '../components/EditBook';

var uri = process.env.MIX_API_URL;

export const routes = [
    {
        name: 'home',
        path: uri + '/',
        component: Home
    },
    {
        name: 'prpostatus',
        path: uri + '/prpostatus',
        component: Prpostatus
    },
    {
        name: 'register',
        path: uri + '/register',
        component: Register
    },
    {
        name: 'login',
        path: uri + '/login',
        component: Login
    },
    {
        name: 'dashboard',
        path: uri + '/dashboard',
        component: Dashboard
    },
    {
        name: 'books',
        path: uri + '/books',
        component: Books
    },
    {
        name: 'addbook',
        path: uri + '/books/add',
        component: AddBook
    },
    {
        name: 'editbook',
        path: uri + '/books/edit/:id',
        component: EditBook
    },
];

const router = createRouter({
    base: '/sapmm',
    history: createWebHistory(),
    routes: routes,
});

export default router;
