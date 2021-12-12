class CategoryController extends ApiReponseController
{
    public function all()
    {
        return $this->succesResponse(Category::all());
    }

    public function index()
    {
        return $this->succesResponse(Category::paginate(10));
    }
}