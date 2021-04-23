import AppStroage from './AdminAppStorage'
class Admin {
    login(data) {
        AppStroage.store(data);
    }
    loggedIn() {
        return AppStroage.logged();
    }
    name() {
        if (this.loggedIn()) {

            if (AppStroage.getAdmin()['name']);
        }
    }

    id() {
        if (this.loggedIn()) {
            if (AppStroage.getAdmin()) {
                return AppStroage.getAdmin()['id'];
            } else {
                return "";
            }
        }
    }
    logout() {
        axios.get("/logout").then(res => {
            AppStroage.clear();
            window.location = laravel.baseurl + "/admin/login"
        }).catch(error => console.log(error));
    }
}

export default Admin = new Admin();