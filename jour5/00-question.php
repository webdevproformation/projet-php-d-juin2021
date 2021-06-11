
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

// [{}] => 

$connexion = new PDO();
$requete = $connexion->prepare("SELECT * FROM articles WHERE id = 1");
$requete->execute();
$data = $requete->fetchAll(PDO::FETCH_OBJ) => ne pas confondre fetch et fetchAll

si => [ ] "SELECT * FROM articles WHERE id = 1000000"
si => [{ }]  "SELECT * FROM articles WHERE id = 1"
si => [{},{},{}] "SELECT * FROM articles"

$data = $requete->fetch(PDO::FETCH_OBJ)

si null / false  "SELECT * FROM articles WHERE id = 1000000"
si => { }  "SELECT * FROM articles WHERE id = 1"
IMPOSSIBLE si => [{},{},{}] 