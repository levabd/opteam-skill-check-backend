const Home = () => import('~/pages/home').then(m => m.default || m)
const Welcome = () => import('~/pages/welcome').then(m => m.default || m)

const Login = () => import('~/pages/auth/login').then(m => m.default || m)
const Register = () => import('~/pages/auth/register').then(m => m.default || m)
const PasswordReset = () => import('~/pages/auth/password/reset').then(m => m.default || m)
const PasswordRequest = () => import('~/pages/auth/password/email').then(m => m.default || m)

const Settings = () => import('~/pages/settings/index').then(m => m.default || m)
const SettingsProfile = () => import('~/pages/settings/profile').then(m => m.default || m)
const SettingsPassword = () => import('~/pages/settings/password').then(m => m.default || m)

const Admin = () => import('~/pages/admin/index').then(m => m.default || m)
const Dashboard = () => import('~/pages/admin/dashboard').then(m => m.default || m)
const AdminUserIndex = () => import('~/pages/admin/users/index').then(m => m.default || m)
const AdminUserList = () => import('~/pages/admin/users/list').then(m => m.default || m)
const AdminUserForm = () => import('~/pages/admin/users/form').then(m => m.default || m)

export default [
  {path: '/', name: 'welcome', component: Welcome},

  {path: '/login', name: 'login', component: Login},
  {path: '/register', name: 'register', component: Register},
  {path: '/password/reset', name: 'password.request', component: PasswordRequest},
  {path: '/password/reset/:token', name: 'password.reset', component: PasswordReset},

  {path: '/home', name: 'home', component: Home},
  {path: '/settings', component: Settings, children: [
    {path: '', redirect: {name: 'settings.profile'}},
    {path: 'profile', name: 'settings.profile', component: SettingsProfile},
    {path: 'password', name: 'settings.password', component: SettingsPassword}]},
  {path: '/admin', name: 'admin', component: Admin, children: [
    {path: 'dashboard', name: 'admin.dashboard', component: Dashboard},
    {path: 'users', name: 'users', component: AdminUserIndex, children: [
      {path: 'list', name: 'admin.users.list', component: AdminUserList},
      {path: 'create', name: 'admin.users.create', component: AdminUserForm},
      {path: 'update/:userId', name: 'admin.users.update', component: AdminUserForm}]},
  ]},
  {path: '*', component: require('~/pages/errors/404.vue')}
]
