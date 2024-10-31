<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *    path="/api/notebook",
 *    summary="Создание",
 *    tags={"Notebook"},
 *
 *
 *    @OA\RequestBody(
 *      @OA\JsonContent(
 *          allOf={
 *              @OA\Schema(
 *                  @OA\Property(property="full_name",type="string",example="Ivan Ivanov Ivanovisch"),
 *                  @OA\Property(property="company",type="string",example="Фьюче"),
 *                  @OA\Property(property="phone",type="string",example="+70123456789"),
 *                  @OA\Property(property="email",type="string",example="example@gmail.com"),
 *                  @OA\Property(property="birth_date",type="string",format="date", example="1990-01-01"),
 *                  @OA\Property(property="photo",type="string",example="example.jpeg"),
 *              )
 *          }
 *      )
 *    ),
 *
 *    @OA\Response(
 *        response=200,
 *        description="Данные успешно занесены",
 *        @OA\JsonContent(@OA\Property(
 *              property="data",type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="full_name", type="string", example="Ivan Ivanov Ivanovisch"),
 *                  @OA\Property(property="company", type="string", example="Фьюче"),
 *                  @OA\Property(property="phone", type="string", example="+70123456789"),
 *                  @OA\Property(property="email", type="string", example="example@gmail.com"),
 *                  @OA\Property(property="birth_date", type="string", format="date", example="1990-01-01"),
 *                  @OA\Property(property="photo", type="string", example="example.jpeg")
 *              ),
 *          ),
 *    ),
 * ),
 * @OA\Get(
 *    path="/api/v1/notebook",
 *    summary="Получить список всех записей",
 *    tags={"Notebook"},
 *    @OA\Response(
 *        response=200,
 *        description="Список всех записей",
 *        @OA\JsonContent(
 *            type="array",
 *            @OA\Items(
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="full_name", type="string", example="Ivan Ivanov Ivanovisch"),
 *                @OA\Property(property="company", type="string", example="Фьюче"),
 *                @OA\Property(property="phone", type="string", example="+70123456789"),
 *                @OA\Property(property="email", type="string", example="example@gmail.com"),
 *                @OA\Property(property="birth_date", type="string", format="date", example="1990-01-01"),
 *                @OA\Property(property="photo", type="string", example="example.jpeg")
 *            )
 *        )
 *    )
 *),
 * @OA\Get(
 *      path="/api/v1/notebook/{notebook}",
 *      summary="Получить запись по ID",
 *      tags={"Notebook"},
 *      @OA\Parameter(
 *          name="id",
 *          in="path",
 *          required=true,
 *          description="ID записи",
 *          @OA\Schema(type="integer")
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Запись найдена",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="full_name", type="string", example="Ivan Ivanov Ivanovisch"),
 *              @OA\Property(property="company", type="string", example="Фьюче"),
 *              @OA\Property(property="phone", type="string", example="+70123456789"),
 *              @OA\Property(property="email", type="string", example="example@gmail.com"),
 *              @OA\Property(property="birth_date", type="string", format="date", example="1990-01-01"),
 *              @OA\Property(property="photo", type="string", example="example.jpeg")
 *          )
 *      ),
 *      @OA\Response(response=404, description="Запись не найдена")
 *  ),
 * @OA\Patch(
 *     path="/api/v1/notebook/{notebook}",
 *     summary="Обновить запись",
 *     tags={"Notebook"},
 *     @OA\Parameter(
 *          name="id",
 *          in="path",
 *          required=true,
 *          description="ID записи",
 *          @OA\Schema(type="integer")
 *      ),
 *     @OA\RequestBody(
 *       required=true,
 *       @OA\JsonContent(
 *           @OA\Property(property="full_name", type="string", example="Ivan Ivanov Ivanovisch"),
 *           @OA\Property(property="company", type="string", example="Фьюче"),
 *           @OA\Property(property="phone", type="string", example="+70123456789"),
 *           @OA\Property(property="email", type="string", example="example@gmail.com"),
 *           @OA\Property(property="birth_date", type="string", format="date", example="1990-01-01"),
 *           @OA\Property(property="photo", type="string", example="example.jpeg")
 *       )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Запись успешно обновлена",
 *         @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="full_name", type="string", example="Ivan Ivanov Ivanovisch"),
 *              @OA\Property(property="company", type="string", example="Фьюче"),
 *              @OA\Property(property="phone", type="string", example="+70123456789"),
 *              @OA\Property(property="email", type="string", example="example@gmail.com"),
 *              @OA\Property(property="birth_date", type="string", format="date", example="1990-01-01"),
 *              @OA\Property(property="photo", type="string", example="example.jpeg")
 *          )
 *     ),
 *     @OA\Response(response=404, description="Запись не найдена")
 *  ),
 *
 * @OA\Delete(
 *      path="/api/v1/notebook/{notebook}",
 *      summary="Удалить запись по ID",
 *      tags={"Notebook"},
 *      @OA\Parameter(
 *          name="id",
 *          in="path",
 *          required=true,
 *          description="ID записи",
 *          @OA\Schema(type="integer")
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Запись успешно удалена",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="done")
 *          )
 *      ),
 *      @OA\Response(response=404, description="Запись не найдена")
 *  )
 */
class NotebookController extends Controller
{
}
