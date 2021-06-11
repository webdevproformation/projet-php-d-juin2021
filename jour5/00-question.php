
// class parent => core
class Controller{
    private $vars = [];
    public function renderMethode1($nom_template , $data){
        // ....
    } 
    public function set($data){
        $this->vars = $data
    }
    public function renderMethode2($nom_template){
        $this->vars
        //.....
    }
}

// class enfant => controller 
class AccueilController extends Controller{
    public function index(){
        $donnes = [1,2,3,4]; // créer une variable 
        $this->renderMethode1("index" , $donnes);
    } 
    public function accueil(){
        $donnes = [1,2,3,4]; // créer une variable 
        $this->set($donnes);
        $this->renderMethode2("index");
    }
}