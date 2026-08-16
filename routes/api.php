<?php

use App\Http\Controllers\Api\MemoryController;
use App\Http\Controllers\Api\MobileApplicationController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::prefix("/memory")->group(function(){
        Route::get('/', [MemoryController::class, "index"]);
        Route::post('/', [MemoryController::class, "store"]);
        Route::post('/{id}', [MemoryController::class, "update"]);
        Route::delete('/{id}', [MemoryController::class, "destroy"]);
    });
});

Route::prefix("/user")->group(function(){
    Route::post('/register', [UserController::class, "register"]);
    Route::post('/login', [UserController::class, "login"]);
});

Route::post('/getPaymentDetail', [MobileApplicationController::class, "getPaymentDetail"]);

Route::get('/health-tips', function (Request $request) {
    return response()->json([
        [
            "id" => "1",
            "title" => "Stay Hydrated",
            "description" => "Drink at least 7–8 glasses of water daily to maintain energy levels, improve digestion, and support overall body functions.",
            "image" => asset("images/health_tips/stay_hydarated.jpg")
        ],
        [
            "id" => "2",
            "title" => "Get Enough Sleep",
            "description" => "Aim for 7–9 hours of quality sleep each night to boost immunity, improve focus, and enhance mental well-being.",
            "image" => asset("images/health_tips/get_enough_sleep.jpg")
        ],
        [
            "id" => "3",
            "title" => "Exercise Regularly",
            "description" => "Engage in at least 30 minutes of moderate physical activity like walking, jogging, or cycling most days of the week.",
            "image" => asset("images/health_tips/exercise_regularly.jpg")
        ],
        [
            "id" => "4",
            "title" => "Eat Balanced Meals",
            "description" => "Include a mix of vegetables, fruits, whole grains, lean proteins, and healthy fats in your daily diet.",
            "image" => asset("images/health_tips/eat_balanced_meals.jpg")
        ],
        [
            "id" => "5",
            "title" => "Limit Sugar Intake",
            "description" => "Reduce consumption of sugary drinks and processed snacks to prevent weight gain and lower the risk of chronic diseases.",
            "image" => asset("images/health_tips/limit_sugar_intake.jpg")
        ],
        [
            "id" => "6",
            "title" => "Practice Stress Management",
            "description" => "Incorporate relaxation techniques such as deep breathing, meditation, or yoga to manage stress effectively.",
            "image" => asset("images/health_tips/practice_stress_management.jpg")
        ],
        [
            "id" => "7",
            "title" => "Avoid Smoking",
            "description" => "Stay away from tobacco products to reduce the risk of lung disease, heart problems, and other serious health conditions.",
            "image" => asset("images/health_tips/avoid_smoking.jpg")
        ],
        [
            "id" => "8",
            "title" => "Maintain Good Hygiene",
            "description" => "Wash your hands regularly and maintain personal cleanliness to prevent infections and illnesses.",
            "image" => asset("images/health_tips/maintain_good_hygiene.jpg")
        ],
        [
            "id" => "9",
            "title" => "Take Regular Breaks",
            "description" => "If you work long hours at a desk, take short breaks every hour to stretch and rest your eyes.",
            "image" => asset("images/health_tips/take_regular_breaks.jpg")
        ],
        [
            "id" => "10",
            "title" => "Schedule Health Checkups",
            "description" => "Visit your healthcare provider regularly for preventive screenings and early detection of potential health issues.",
            "image" => asset("images/health_tips/schedule_health_checkups.jpg")
        ]
    ], 200);
});

Route::get('/budget-advice', function (Request $request) {
    return response()->json([
        [
            "id" => "1",
            "title" => "Follow the 50/30/20 Rule",
            "description" => "Split your after-tax income into 50% needs (rent, groceries, bills), 30% wants (dining out, entertainment), and 20% savings or debt repayment. It's a simple framework that keeps spending balanced without needing a detailed line-by-line budget.",
            "image" => "https://i.pinimg.com/736x/5c/4d/da/5c4dda7593b541370e7e0c1deec6acb3.jpg"
        ],
        [
            "id" => "2",
            "title" => "Track Every Expense for a Month",
            "description" => "Write down or use an app to log everything you spend for 30 days. Seeing the real numbers—not estimates—usually reveals leaks like subscriptions you forgot about or daily small purchases that add up fast.",
            "image" => "https://www.howtomoney.com/wp-content/uploads/2023/10/image-1-1.jpg"
        ],
        [
            "id" => "3",
            "title" => "Automate Your Savings",
            "description" => "Set up an automatic transfer to a savings account right when your paycheck arrives, before you have a chance to spend it. Treating savings like a fixed bill makes it consistent instead of relying on willpower each month.",
            "image" => "https://i.pinimg.com/736x/ae/fc/95/aefc951d372ee70a2866042551632356.jpg"
        ]
    ], 200);
});

Route::post('/reply', function(Request $request){ return Response($request->all()); });